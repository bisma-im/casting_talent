<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\JobOpportunityMail;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;

class SendJobOpportunityEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $model;
    protected $emailData;
    
    /**
     * Create a new job instance.
     *
     * @param mixed $model
     * @param array $emailData
     */
    public function __construct($model, array $emailData)
    {
        $this->model = $model;
        $this->emailData = $emailData;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        try {
            Log::info('Starting SendJobOpportunityEmail job for model:', [
                'model_id' => $this->model->id,
                'email' => $this->model->email,
            ]);

            // Log the email data being sent
            Log::info('Email data:', $this->emailData);

            // Send the email
            Mail::to($this->model->email)->send(new JobOpportunityMail($this->emailData));

            Log::info('Email sent successfully to:', [
                'email' => $this->model->email,
            ]);
        } catch (\Exception $e) {
            Log::error('Failed to send email:', [
                'model_id' => $this->model->id,
                'email' => $this->model->email,
                'error' => $e->getMessage(),
            ]);
        }
    }
}
