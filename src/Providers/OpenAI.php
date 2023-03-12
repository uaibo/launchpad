<?php
namespace Uaibo\Launchpad;

use Tectalic\OpenAi\Authentication;
use Tectalic\OpenAi\Client;
use Tectalic\OpenAi\Manager;
use GuzzleHttp\Client as GuzzleClient;

class OpenAI{

    private $openaiClient;

    function __construct()
    {
        $this->openaiClient = Manager::build(
            new GuzzleClient(), 
            new Authentication(
                config('launchpad.openai_key')
            )
        );
    }

    function getSystemMessage()
    {
        return [
            'role' => 'system',
            'content' => 'I want you to act like a saas marketer. You must answer in a persuasive manner that makes the end user curious to try your solution. Avoid hashtags and avoid words like software, saas, early and similar words that leave the user feel as if there is not much value on the early stages of the app.',
        ];
    }

    public function getMessage($prompt)
    {
        $response = $this->openaiClient->chatCompletions()->create(
            new \Tectalic\OpenAi\Models\ChatCompletions\CreateRequest([
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    $this->getSystemMessage(),
                    [
                        'role' => 'user',
                        'content' => $prompt
                    ],
                ],
            ])
        )->toModel();
        
        return $response->choices[0]->message->content;
    }

}
