<?php
namespace Sitegeist\Fusion\Standalone\Tests\Functional;

use PHPUnit\Framework\TestCase;
use Sitegeist\Fusion\Standalone\Core\Runtime;

class RuntimeTest extends TestCase
{

    /**
     * @test
     */
    public function renderEmptyProtptypeCase()
    {
        $fusionAst = json_decode(file_get_contents(__DIR__ . '/Fixtures/exampleAst.json'), true);
        $runtime = new Runtime($fusionAst);
        $output = $runtime->render('renderPrototype_Vendor_Site_Example');

        $this->assertEquals($output, '<div></div>');
    }

    /**
     * @test
     */
    public function linkCase()
    {

        $fusionAst = json_decode(file_get_contents(__DIR__ . '/Fixtures/exampleAst.json'), true);
        $runtime = new Runtime($fusionAst);

        $runtime->pushContextArray(['attribute' => 'attribute', 'content' => 'content', 'augmentedAttribute' => 'augmentedAttribute']);
        $output = $runtime->render('renderPrototype_Vendor_Site_Example');
        $runtime->popContext();

        $this->assertEquals($output, '<div augmentedAttribute="augmentedAttribute" attribute="attribute">content</div>');
    }

}
