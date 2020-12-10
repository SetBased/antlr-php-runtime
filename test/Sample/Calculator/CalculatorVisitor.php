<?php
declare(strict_types=1);

namespace Antlr\Antlr4\Runtime\Test\Sample\Calculator;

use Antlr\Antlr4\Runtime\Test\Sample\Calculator\Antlr\CalculatorParserBaseVisitor;
use Antlr\Antlr4\Runtime\Test\Sample\Calculator\Antlr\Context;
use Antlr\Antlr4\Runtime\Tree\ErrorNode;

/**
 * Visitor for calculator.
 */
class CalculatorVisitor extends CalculatorParserBaseVisitor
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * The defined variables. Map from variable name to the value.
   *
   * @var array<string,float>
   */
  private array $variables;

  //--------------------------------------------------------------------------------------------------------------------

  /**
   * Object constructor.
   */
  public function __construct()
  {
    $this->variables = [];
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * {@inheritdoc}
   */
  public function visitBraces(Context\BracesContext $context)
  {
    return $this->visit($context->plusOrMinus());
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * {@inheritdoc}
   */
  public function visitCalculate(Context\CalculateContext $context)
  {
    return $this->visit($context->plusOrMinus());
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * {@inheritdoc}
   */
  public function visitChangeSign(Context\ChangeSignContext $context)
  {
    return -1 * $this->visit($context->unaryMinus());
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns e.
   *
   * @param Context\ConstantEContext $context The parse tree.
   *
   * @return float
   */
  public function visitConstantE(Context\ConstantEContext $context)
  {
    return exp(1.0);
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns pi.
   *
   * @param Context\ConstantPIContext $context The parse tree.
   *
   * @return float
   */
  public function visitConstantPI(Context\ConstantPIContext $context)
  {
    return pi();
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * {@inheritdoc}
   */
  public function visitDivision(Context\DivisionContext $context)
  {
    return $this->visit($context->multOrDiv()) / $this->visit($context->exp());
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * {@inheritdoc}
   */
  public function visitDouble(Context\DoubleContext $context)
  {
    return (float)($context->DOUBLE()->getText());
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * {@inheritdoc}
   */
  public function visitErrorNode(ErrorNode $tree)
  {
    echo 'Syntax error at:', $tree->getSourceInterval(), PHP_EOL;

    return null;
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * {@inheritdoc}
   */
  public function visitInt(Context\IntContext $context)
  {
    return (float)($context->INT()->getText());
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * {@inheritdoc}
   */
  public function visitMinus(Context\MinusContext $context)
  {
    return $this->visit($context->plusOrMinus()) - $this->visit($context->multOrDiv());
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * {@inheritdoc}
   */
  /**
   * {@inheritdoc}
   */
  public function visitMultiplication(Context\MultiplicationContext $context)
  {
    return $this->visit($context->multOrDiv()) * $this->visit($context->exp());
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * @param Context\PlusContext $context
   *
   * @return float
   */
  public function visitPlus(Context\PlusContext $context)
  {
    return $this->visit($context->plusOrMinus()) + $this->visit($context->multOrDiv());
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * {@inheritdoc}
   */
  public function visitPower(Context\PowerContext $context)
  {
    if ($context->exp()!==null)
    {
      return pow($this->visit($context->unaryMinus()), $this->visit($context->exp()));
    }

    return $this->visit($context->unaryMinus());
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * {@inheritdoc}
   */
  public function visitSetVariable(Context\SetVariableContext $context)
  {
    $value = $this->visit($context->plusOrMinus());

    $this->variables[$context->ID()->getText()] = $value;

    return $value;
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * {@inheritdoc}
   */
  public function visitVariable(Context\VariableContext $context)
  {
    return $this->variables[$context->ID()->getText()];
  }

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
