<?php

namespace App\Console\Commands;

use App\Models\VerificationCode;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DeleteExpiredVerificationCodes extends Command
{
    protected $signature = 'delete:expired-codes';
    protected $description = 'Delete verification codes older than 15 minutes';

    public function handle()
    {
        DB::table('verification_codes')
            ->where('created_at', '<', Carbon::now()->subMinutes(15))
            ->delete();

        $this->info('Expired verification codes deleted successfully.');
    }
}
