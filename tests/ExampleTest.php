<?php

namespace ToshiYoung\SamplePackage\Test;

use ToshiYoung\SamplePackage\SamplePackage;

class ExampleTest extends FeatureTestCase
{
    /**
     * @test
     */
    public function is_registered_service_provider()
    {
        $this->assertTrue(app()->get(SamplePackage::class) instanceof SamplePackage);
    }
}