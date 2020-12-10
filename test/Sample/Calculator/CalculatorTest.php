<?php
declare(strict_types=1);

namespace Antlr\Antlr4\Runtime\Test\Sample\Calculator;

use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\Error\Listeners\DiagnosticErrorListener;
use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\Test\Sample\Calculator\Antlr\CalculatorLexer;
use Antlr\Antlr4\Runtime\Test\Sample\Calculator\Antlr\CalculatorParser;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the calculator.
 */
class CalculatorTest extends TestCase
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * The calculator.
   *
   * @var CalculatorVisitor
   */
  private CalculatorVisitor $visitor;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Test the example.
   */
  public function testExample1(): void
  {
    $input  = <<< EOL
a = 1+2
b = a^2
c = a + b * (a - 1)
a + b + c
EOL;
    $result = $this->calculator($input);
    self::assertSame(33.0, $result);
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Test the example.
   */
  public function testExample2(): void
  {
    $this->calculator('a = 1+2');
    $this->calculator('b = a^2');
    $this->calculator('c = a + b * (a - 1)');
    $result = $this->calculator('a + b + c');
    self::assertSame(33.0, $result);
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Test empty string.
   */
  public function test01(): void
  {
    $result = $this->calculator('');
    self::assertNull($result);
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Test empty string.
   */
  public function test02(): void
  {
    $result = $this->calculator("\n \r \t ");
    self::assertNull($result);
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Test e ^ pi.
   */
  public function test03(): void
  {
    $result = $this->calculator('e ^ -pi');
    self::assertSame(exp(-pi()), $result);
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Test division.
   */
  public function test04(): void
  {
    $result = $this->calculator('pi / e');
    self::assertSame(pi()/exp(1.0), $result);
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Test syntax error.
   */
  public function test05(): void
  {
    $this->expectOutputRegex('/error/');
    $this->calculator('**');
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Runs the calculator.
   *
   * @param string $input The input or the calculator.
   *
   * @return float|null
   */
  private function calculator(string $input): ?float
  {
    $input  = InputStream::fromString($input);
    $lexer  = new CalculatorLexer($input);
    $tokens = new CommonTokenStream($lexer);

    $parser = new CalculatorParser($tokens);
    $parser->addErrorListener(new DiagnosticErrorListener());
    $parser->setBuildParseTree(true);
    $tree = $parser->input();

    return $this->visitor->visit($tree);
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * @inheritdoc
   */
  public function setUp(): void
  {
    $this->visitor = new CalculatorVisitor();
  }

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
