<?php
/**
 * Date: 01.09.17
 * copyright 2017 blage.net Sören Rohweder
 */

namespace Truustio\Sepa\Tests\Unit;

use Truustio\Sepa\PaymentInformation;
use PHPUnit\Framework\TestCase;

class PaymentInformationTest extends TestCase
{
    public function testDateIsReturnedInDefaultFormat(): void
    {
        $pi = new PaymentInformation('1', 'DE121212121212121212', 'DE1212121212121212', 'Jon Doe');
        $pi->setDueDate(new \DateTime('2017-08-31 12:13:14'));
        $this->assertEquals('2017-08-31', $pi->getDueDate());
    }

    public function testDateIsReturnedWithGivenFormat(): void
    {
        $pi = new PaymentInformation('1', 'DE121212121212121212', 'DE1212121212121212', 'Jon Doe');
        $pi->setDueDate(new \DateTime('2017-08-31 12:13:14'));
        $pi->setDueDateFormat('d.m.Y');
        $this->assertEquals('31.08.2017', $pi->getDueDate());
    }
}
