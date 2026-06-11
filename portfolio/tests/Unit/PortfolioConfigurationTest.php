<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class PortfolioConfigurationTest extends TestCase
{
    private array $portfolio;

    protected function setUp(): void
    {
        parent::setUp();

        $this->portfolio = require dirname(__DIR__, 2).'/config/portfolio.php';
    }

    public function test_portfolio_has_all_required_sections(): void
    {
        $this->assertSame(
            ['skills', 'certificates', 'activities'],
            array_keys($this->portfolio),
        );

        $this->assertNotEmpty($this->portfolio['skills']);
        $this->assertNotEmpty($this->portfolio['certificates']);
        $this->assertNotEmpty($this->portfolio['activities']);
    }

    public function test_certificates_have_consistent_fields(): void
    {
        foreach ($this->portfolio['certificates'] as $certificate) {
            $this->assertSame(['name', 'issuer', 'year'], array_keys($certificate));
            $this->assertNotSame('', $certificate['name']);
            $this->assertNotSame('', $certificate['issuer']);
            $this->assertMatchesRegularExpression('/^\d{4}$/', $certificate['year']);
        }
    }

    public function test_activities_have_consistent_fields(): void
    {
        foreach ($this->portfolio['activities'] as $activity) {
            $this->assertSame(['role', 'date'], array_keys($activity));
            $this->assertNotSame('', $activity['role']);
            $this->assertNotSame('', $activity['date']);
        }
    }
}
