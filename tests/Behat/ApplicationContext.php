<?php


namespace App\Tests\Behat;

use Behat\Gherkin\Node\PyStringNode;
use Behat\MinkExtension\Context\RawMinkContext;
use Behat\Behat\Tester\Exception\PendingException;

final class ApplicationContext extends RawMinkContext
{

    /**
     * @Given I make a PUT request to :arg1 with body
     */
    public function iMakeAPutRequestToWithBody($path, PyStringNode $body)
    {
       
    }

    /**
     * @Then the response content should be empty
     */
    public function theResponseContentShouldBeEmpty()
    {
        throw new PendingException();
    }

    /**
     * @Then the response status code should be :arg1
     */
    public function theResponseStatusCodeShouldBe($arg1)
    {
        throw new PendingException();
    }

}