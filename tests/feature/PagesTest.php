<?php

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;

final class PagesTest extends CIUnitTestCase
{
    use FeatureTestTrait;

    public function testHomePageLoads(): void
    {
        $result = $this->get('/');

        $result->assertStatus(200);
        $result->assertSee('People records, kept simple.');
    }

    public function testAboutPageLoads(): void
    {
        $result = $this->get('/about');

        $result->assertStatus(200);
        $result->assertSee('Basic MVC flow');
    }

    public function testCustomerPageDisplaysFiveRecords(): void
    {
        $result = $this->get('/customers');

        $result->assertStatus(200);
        $result->assertSee('Angela Cruz');
        $result->assertSee('Nicole Mendoza');
        $result->assertSeeInOrder(['Angela Cruz', 'Marco Santos', 'Beatrice Reyes', 'Joshua Garcia', 'Nicole Mendoza']);
    }

    public function testUserPageDisplaysFiveRecords(): void
    {
        $result = $this->get('/users');

        $result->assertStatus(200);
        $result->assertSee('admin01');
        $result->assertSee('staff01');
        $result->assertSeeInOrder(['admin01', 'manager01', 'cashier01', 'cashier02', 'staff01']);
    }
}
