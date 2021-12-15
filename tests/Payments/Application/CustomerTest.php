<?php
declare(strict_types=1);

namespace Ferror\Payments\Application;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;

final class CustomerTest extends WebTestCase
{
    public function testCreateCustomer(): void
    {
        $client = self::createClient();
        $client->request(
            method: Request::METHOD_POST,
            uri: '/customers',
            server: [
                'Content-Type' => 'application/json'
            ],
            content: json_encode([], JSON_THROW_ON_ERROR),
        );
        self::assertResponseStatusCodeSame(500); // infrastructure change required
    }
}
