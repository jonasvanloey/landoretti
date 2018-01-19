<?php

namespace App\Console\Commands;

use App\Bid;
use App\Bieding;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class bidCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check_bids';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'check_bids';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->comment('searching bid');
        try{

            $this->info('finding winner');
            $this->getendingbid();
            $this->info('done');
        }
        catch (QueryException $e ) {
            $this->comment('something went wrong');
            $this->error($e->getMessage());
        }

        //
    }
    public function getendingbid(){
        $this->comment('lalala');
        $today=date('Y-m-d');
        $endingbids=DB::table('bids')->where('end_date',$today)->get();

        foreach ($endingbids as $end){
            Bid::where('id',$end->id)->update([
                'is_active' => 0,
                'sold' => 1
            ]);
            $this->info($end->id);
           $highest=DB::table('biedings')->where('bid_id',$end->id)->orderBy('bid_price','DESC')->first();

            Bieding::where('id',$highest->id)->update(['is_winner'=>1]);
            $otherhigh = DB::table('biedings')->where('user_id',$highest->user_id)->where('is_winner',0)->get();
            foreach ($otherhigh as $o){
                $o->delete();
            }
            $husers=DB::table('users')->where('id',$highest->user_id)->get()->values();
//            $this->comment($husers);
            $this->sendwinnermail($husers);
           $other=DB::table('biedings')->where('bid_id',$end->id)->where('bid_price','<',$highest->bid_price)->groupBy('user_id')->get();
            foreach($other as $b){
                $user=DB::table('users')->where('id',$b->user_id)->get();
                $this->comment($user);
                $this->sendlosermail($user);
            }

        }
    }
    public function sendwinnermail($highest){
        $user = $highest->toArray();
        Mail::send('emails.winner', $user, function($message) use ($highest) {
            $u=$highest[0];
            $this->comment('sending mail to '.$u->email);
            $message->from('no-reply@landorreti.be','gewonnen bieding');
            $message->to($u->email);
            $message->subject('Gefeliciteerd');
        });
    }
    public function sendlosermail($lowest){
        $user = User::find(1)->toArray();
        Mail::send('emails.loser', $user, function($message) use ($lowest) {
            $u=$lowest[0];
            $message->from('no-reply@landorreti.be','verloren bieding');
            $this->info('sending mail to '.$u->email);
            $message->to($u->email);
            $message->subject('jammer');
        });
    }
}
