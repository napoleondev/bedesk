<?php namespace App\Services\Mail\Transformers;

class NullMailTransformer implements MailTransformer
{
    /**
     * Transform email data into format usable by the app.
     *
     * @param array|string $emailData
     * @return array
     */
    public function transform($emailData)
    {
        if (is_array($emailData) && $emailData['mime']) {
            return app(MimeMailTransformer::class)
                ->transform($emailData['mime']);
        } else {
            return $emailData;
        }
    }

}
