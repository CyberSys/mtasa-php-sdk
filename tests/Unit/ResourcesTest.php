<?php

/*****************************************************************************
 *
 *  PROJECT:     MTA PHP SDK
 *  LICENSE:     See LICENSE in the top level directory
 *  FILE:        ResourcesTest.php
 *  VERSION:     1.0.0
 *
 *  Multi Theft Auto is available from http://www.multitheftauto.com/
 *
 *****************************************************************************/

declare(strict_types=1);

namespace MultiTheftAuto\Sdk\Model;

use PHPUnit\Framework\TestCase;

class ResourcesTest extends TestCase
{
    public function testItFindsExistingResource(): void
    {
        $resources = new Resources();
        $resource = new Resource('someName');
        $resources->add($resource);
        $this->assertEquals($resource, $resources->findByName('someName'));
    }

    public function testItReturnsNullIfResourceNotFound(): void
    {
        $resources = new Resources();
        $this->assertNull($resources->findByName('someName'));
    }
}
