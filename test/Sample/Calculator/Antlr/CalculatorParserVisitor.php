<?php

/*
 * Generated from test/Sample/Calculator/Antlr/CalculatorParser.g4 by ANTLR 4.9
 */

namespace Antlr\Antlr4\Runtime\Test\Sample\Calculator\Antlr;

use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;

/**
 * This interface defines a complete generic visitor for a parse tree produced by {@see CalculatorParser}.
 */
interface CalculatorParserVisitor extends ParseTreeVisitor
{
	/**
	 * Visit a parse tree produced by the `ToSetVar` labeled alternative
	 * in {@see CalculatorParser::input()}.
	 *
	 * @param Context\ToSetVarContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitToSetVar(Context\ToSetVarContext $context);

	/**
	 * Visit a parse tree produced by the `Calculate` labeled alternative
	 * in {@see CalculatorParser::input()}.
	 *
	 * @param Context\CalculateContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCalculate(Context\CalculateContext $context);

	/**
	 * Visit a parse tree produced by the `SetVariable` labeled alternative
	 * in {@see CalculatorParser::setVar()}.
	 *
	 * @param Context\SetVariableContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSetVariable(Context\SetVariableContext $context);

	/**
	 * Visit a parse tree produced by the `ToMultOrDiv` labeled alternative
	 * in {@see CalculatorParser::plusOrMinus()}.
	 *
	 * @param Context\ToMultOrDivContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitToMultOrDiv(Context\ToMultOrDivContext $context);

	/**
	 * Visit a parse tree produced by the `Plus` labeled alternative
	 * in {@see CalculatorParser::plusOrMinus()}.
	 *
	 * @param Context\PlusContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPlus(Context\PlusContext $context);

	/**
	 * Visit a parse tree produced by the `Minus` labeled alternative
	 * in {@see CalculatorParser::plusOrMinus()}.
	 *
	 * @param Context\MinusContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMinus(Context\MinusContext $context);

	/**
	 * Visit a parse tree produced by the `Multiplication` labeled alternative
	 * in {@see CalculatorParser::multOrDiv()}.
	 *
	 * @param Context\MultiplicationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMultiplication(Context\MultiplicationContext $context);

	/**
	 * Visit a parse tree produced by the `Division` labeled alternative
	 * in {@see CalculatorParser::multOrDiv()}.
	 *
	 * @param Context\DivisionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDivision(Context\DivisionContext $context);

	/**
	 * Visit a parse tree produced by the `ToPow` labeled alternative
	 * in {@see CalculatorParser::multOrDiv()}.
	 *
	 * @param Context\ToPowContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitToPow(Context\ToPowContext $context);

	/**
	 * Visit a parse tree produced by the `Power` labeled alternative
	 * in {@see CalculatorParser::exp()}.
	 *
	 * @param Context\PowerContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPower(Context\PowerContext $context);

	/**
	 * Visit a parse tree produced by the `ChangeSign` labeled alternative
	 * in {@see CalculatorParser::unaryMinus()}.
	 *
	 * @param Context\ChangeSignContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitChangeSign(Context\ChangeSignContext $context);

	/**
	 * Visit a parse tree produced by the `ToAtom` labeled alternative
	 * in {@see CalculatorParser::unaryMinus()}.
	 *
	 * @param Context\ToAtomContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitToAtom(Context\ToAtomContext $context);

	/**
	 * Visit a parse tree produced by the `ConstantPI` labeled alternative
	 * in {@see CalculatorParser::atom()}.
	 *
	 * @param Context\ConstantPIContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitConstantPI(Context\ConstantPIContext $context);

	/**
	 * Visit a parse tree produced by the `ConstantE` labeled alternative
	 * in {@see CalculatorParser::atom()}.
	 *
	 * @param Context\ConstantEContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitConstantE(Context\ConstantEContext $context);

	/**
	 * Visit a parse tree produced by the `Double` labeled alternative
	 * in {@see CalculatorParser::atom()}.
	 *
	 * @param Context\DoubleContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDouble(Context\DoubleContext $context);

	/**
	 * Visit a parse tree produced by the `Int` labeled alternative
	 * in {@see CalculatorParser::atom()}.
	 *
	 * @param Context\IntContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitInt(Context\IntContext $context);

	/**
	 * Visit a parse tree produced by the `Variable` labeled alternative
	 * in {@see CalculatorParser::atom()}.
	 *
	 * @param Context\VariableContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitVariable(Context\VariableContext $context);

	/**
	 * Visit a parse tree produced by the `Braces` labeled alternative
	 * in {@see CalculatorParser::atom()}.
	 *
	 * @param Context\BracesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBraces(Context\BracesContext $context);
}