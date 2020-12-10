<?php
declare(strict_types=1);

use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\Error\Listeners\DiagnosticErrorListener;
use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\Test\Sample\Calculator\Antlr\CalculatorLexer;
use Antlr\Antlr4\Runtime\Test\Sample\Calculator\Antlr\CalculatorParser;
use Antlr\Antlr4\Runtime\Test\Sample\Calculator\CalculatorVisitor;

require __DIR__.'/../../../vendor/autoload.php';

$visitor = new CalculatorVisitor();
while (($line = readline('calc: '))!==false)
{
  $input  = InputStream::fromString($line);
  $lexer  = new CalculatorLexer($input);
  $tokens = new CommonTokenStream($lexer);

  $parser = new CalculatorParser($tokens);
  $parser->addErrorListener(new DiagnosticErrorListener());
  $parser->setBuildParseTree(true);
  $tree = $parser->input();

  $result = $visitor->visit($tree);
  echo $result, PHP_EOL;
}
echo PHP_EOL;
