<?php

/*
 * Generated from test/Sample/Calculator/Antlr/CalculatorParser.g4 by ANTLR 4.9
 */

namespace Antlr\Antlr4\Runtime\Test\Sample\Calculator\Antlr {
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\ParserATNSimulator;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Error\Exceptions\FailedPredicateException;
	use Antlr\Antlr4\Runtime\Error\Exceptions\NoViableAltException;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\TokenStream;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\VocabularyImpl;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\Parser;

	final class CalculatorParser extends Parser
	{
		public const INT = 1, DOUBLE = 2, PI = 3, E = 4, POW = 5, NL = 6, WS = 7, 
               ID = 8, PLUS = 9, EQUAL = 10, MINUS = 11, MULT = 12, DIV = 13, 
               LPAR = 14, RPAR = 15;

		public const RULE_input = 0, RULE_setVar = 1, RULE_plusOrMinus = 2, RULE_multOrDiv = 3, 
               RULE_exp = 4, RULE_unaryMinus = 5, RULE_atom = 6;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'input', 'setVar', 'plusOrMinus', 'multOrDiv', 'exp', 'unaryMinus', 'atom'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, null, null, "'pi'", "'e'", "'^'", "'\n'", null, null, "'+'", 
		    "'='", "'-'", "'*'", "'/'", "'('", "')'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, "INT", "DOUBLE", "PI", "E", "POW", "NL", "WS", "ID", "PLUS", 
		    "EQUAL", "MINUS", "MULT", "DIV", "LPAR", "RPAR"
		];

		/**
		 * @var string
		 */
		private const SERIALIZED_ATN =
			"\u{3}\u{608B}\u{A72A}\u{8133}\u{B9ED}\u{417C}\u{3BE7}\u{7786}\u{5964}" .
		    "\u{3}\u{11}\u{52}\u{4}\u{2}\u{9}\u{2}\u{4}\u{3}\u{9}\u{3}\u{4}\u{4}" .
		    "\u{9}\u{4}\u{4}\u{5}\u{9}\u{5}\u{4}\u{6}\u{9}\u{6}\u{4}\u{7}\u{9}" .
		    "\u{7}\u{4}\u{8}\u{9}\u{8}\u{3}\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}\u{2}" .
		    "\u{3}\u{2}\u{3}\u{2}\u{5}\u{2}\u{17}\u{A}\u{2}\u{3}\u{2}\u{3}\u{2}" .
		    "\u{5}\u{2}\u{1B}\u{A}\u{2}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}" .
		    "\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}" .
		    "\u{4}\u{3}\u{4}\u{3}\u{4}\u{7}\u{4}\u{2A}\u{A}\u{4}\u{C}\u{4}\u{E}" .
		    "\u{4}\u{2D}\u{B}\u{4}\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}\u{3}" .
		    "\u{5}\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}\u{7}\u{5}\u{38}\u{A}" .
		    "\u{5}\u{C}\u{5}\u{E}\u{5}\u{3B}\u{B}\u{5}\u{3}\u{6}\u{3}\u{6}\u{3}" .
		    "\u{6}\u{5}\u{6}\u{40}\u{A}\u{6}\u{3}\u{7}\u{3}\u{7}\u{3}\u{7}\u{5}" .
		    "\u{7}\u{45}\u{A}\u{7}\u{3}\u{8}\u{3}\u{8}\u{3}\u{8}\u{3}\u{8}\u{3}" .
		    "\u{8}\u{3}\u{8}\u{3}\u{8}\u{3}\u{8}\u{3}\u{8}\u{5}\u{8}\u{50}\u{A}" .
		    "\u{8}\u{3}\u{8}\u{2}\u{4}\u{6}\u{8}\u{9}\u{2}\u{4}\u{6}\u{8}\u{A}" .
		    "\u{C}\u{E}\u{2}\u{2}\u{2}\u{57}\u{2}\u{1A}\u{3}\u{2}\u{2}\u{2}\u{4}" .
		    "\u{1C}\u{3}\u{2}\u{2}\u{2}\u{6}\u{20}\u{3}\u{2}\u{2}\u{2}\u{8}\u{2E}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{A}\u{3C}\u{3}\u{2}\u{2}\u{2}\u{C}\u{44}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{E}\u{4F}\u{3}\u{2}\u{2}\u{2}\u{10}\u{11}\u{5}\u{4}" .
		    "\u{3}\u{2}\u{11}\u{12}\u{7}\u{8}\u{2}\u{2}\u{12}\u{13}\u{5}\u{2}\u{2}" .
		    "\u{2}\u{13}\u{1B}\u{3}\u{2}\u{2}\u{2}\u{14}\u{16}\u{5}\u{6}\u{4}\u{2}" .
		    "\u{15}\u{17}\u{7}\u{8}\u{2}\u{2}\u{16}\u{15}\u{3}\u{2}\u{2}\u{2}\u{16}" .
		    "\u{17}\u{3}\u{2}\u{2}\u{2}\u{17}\u{18}\u{3}\u{2}\u{2}\u{2}\u{18}\u{19}" .
		    "\u{7}\u{2}\u{2}\u{3}\u{19}\u{1B}\u{3}\u{2}\u{2}\u{2}\u{1A}\u{10}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{1A}\u{14}\u{3}\u{2}\u{2}\u{2}\u{1B}\u{3}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{1C}\u{1D}\u{7}\u{A}\u{2}\u{2}\u{1D}\u{1E}\u{7}\u{C}\u{2}" .
		    "\u{2}\u{1E}\u{1F}\u{5}\u{6}\u{4}\u{2}\u{1F}\u{5}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{20}\u{21}\u{8}\u{4}\u{1}\u{2}\u{21}\u{22}\u{5}\u{8}\u{5}\u{2}\u{22}" .
		    "\u{2B}\u{3}\u{2}\u{2}\u{2}\u{23}\u{24}\u{C}\u{5}\u{2}\u{2}\u{24}\u{25}" .
		    "\u{7}\u{B}\u{2}\u{2}\u{25}\u{2A}\u{5}\u{8}\u{5}\u{2}\u{26}\u{27}\u{C}" .
		    "\u{4}\u{2}\u{2}\u{27}\u{28}\u{7}\u{D}\u{2}\u{2}\u{28}\u{2A}\u{5}\u{8}" .
		    "\u{5}\u{2}\u{29}\u{23}\u{3}\u{2}\u{2}\u{2}\u{29}\u{26}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{2A}\u{2D}\u{3}\u{2}\u{2}\u{2}\u{2B}\u{29}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{2B}\u{2C}\u{3}\u{2}\u{2}\u{2}\u{2C}\u{7}\u{3}\u{2}\u{2}\u{2}\u{2D}" .
		    "\u{2B}\u{3}\u{2}\u{2}\u{2}\u{2E}\u{2F}\u{8}\u{5}\u{1}\u{2}\u{2F}\u{30}" .
		    "\u{5}\u{A}\u{6}\u{2}\u{30}\u{39}\u{3}\u{2}\u{2}\u{2}\u{31}\u{32}\u{C}" .
		    "\u{5}\u{2}\u{2}\u{32}\u{33}\u{7}\u{E}\u{2}\u{2}\u{33}\u{38}\u{5}\u{A}" .
		    "\u{6}\u{2}\u{34}\u{35}\u{C}\u{4}\u{2}\u{2}\u{35}\u{36}\u{7}\u{F}\u{2}" .
		    "\u{2}\u{36}\u{38}\u{5}\u{A}\u{6}\u{2}\u{37}\u{31}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{37}\u{34}\u{3}\u{2}\u{2}\u{2}\u{38}\u{3B}\u{3}\u{2}\u{2}\u{2}\u{39}" .
		    "\u{37}\u{3}\u{2}\u{2}\u{2}\u{39}\u{3A}\u{3}\u{2}\u{2}\u{2}\u{3A}\u{9}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{3B}\u{39}\u{3}\u{2}\u{2}\u{2}\u{3C}\u{3F}\u{5}" .
		    "\u{C}\u{7}\u{2}\u{3D}\u{3E}\u{7}\u{7}\u{2}\u{2}\u{3E}\u{40}\u{5}\u{A}" .
		    "\u{6}\u{2}\u{3F}\u{3D}\u{3}\u{2}\u{2}\u{2}\u{3F}\u{40}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{40}\u{B}\u{3}\u{2}\u{2}\u{2}\u{41}\u{42}\u{7}\u{D}\u{2}\u{2}" .
		    "\u{42}\u{45}\u{5}\u{C}\u{7}\u{2}\u{43}\u{45}\u{5}\u{E}\u{8}\u{2}\u{44}" .
		    "\u{41}\u{3}\u{2}\u{2}\u{2}\u{44}\u{43}\u{3}\u{2}\u{2}\u{2}\u{45}\u{D}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{46}\u{50}\u{7}\u{5}\u{2}\u{2}\u{47}\u{50}\u{7}" .
		    "\u{6}\u{2}\u{2}\u{48}\u{50}\u{7}\u{4}\u{2}\u{2}\u{49}\u{50}\u{7}\u{3}" .
		    "\u{2}\u{2}\u{4A}\u{50}\u{7}\u{A}\u{2}\u{2}\u{4B}\u{4C}\u{7}\u{10}" .
		    "\u{2}\u{2}\u{4C}\u{4D}\u{5}\u{6}\u{4}\u{2}\u{4D}\u{4E}\u{7}\u{11}" .
		    "\u{2}\u{2}\u{4E}\u{50}\u{3}\u{2}\u{2}\u{2}\u{4F}\u{46}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{4F}\u{47}\u{3}\u{2}\u{2}\u{2}\u{4F}\u{48}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{4F}\u{49}\u{3}\u{2}\u{2}\u{2}\u{4F}\u{4A}\u{3}\u{2}\u{2}\u{2}\u{4F}" .
		    "\u{4B}\u{3}\u{2}\u{2}\u{2}\u{50}\u{F}\u{3}\u{2}\u{2}\u{2}\u{B}\u{16}" .
		    "\u{1A}\u{29}\u{2B}\u{37}\u{39}\u{3F}\u{44}\u{4F}";

		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;

		public function __construct(TokenStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new ParserATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
		}

		private static function initialize() : void
		{
			if (self::$atn !== null) {
				return;
			}

			RuntimeMetaData::checkVersion('4.9', RuntimeMetaData::VERSION);

			$atn = (new ATNDeserializer())->deserialize(self::SERIALIZED_ATN);

			$decisionToDFA = [];
			for ($i = 0, $count = $atn->getNumberOfDecisions(); $i < $count; $i++) {
				$decisionToDFA[] = new DFA($atn->getDecisionState($i), $i);
			}

			self::$atn = $atn;
			self::$decisionToDFA = $decisionToDFA;
			self::$sharedContextCache = new PredictionContextCache();
		}

		public function getGrammarFileName() : string
		{
			return "CalculatorParser.g4";
		}

		public function getRuleNames() : array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN() : string
		{
			return self::SERIALIZED_ATN;
		}

		public function getATN() : ATN
		{
			return self::$atn;
		}

		public function getVocabulary() : Vocabulary
        {
            static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
        }

		/**
		 * @throws RecognitionException
		 */
		public function input() : Context\InputContext
		{
		    $localContext = new Context\InputContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 0, self::RULE_input);

		    try {
		        $this->setState(24);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 1, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\ToSetVarContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(14);
		        	    $this->setVar();
		        	    $this->setState(15);
		        	    $this->match(self::NL);
		        	    $this->setState(16);
		        	    $this->input();
		        	break;

		        	case 2:
		        	    $localContext = new Context\CalculateContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(18);
		        	    $this->recursivePlusOrMinus(0);
		        	    $this->setState(20);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::NL) {
		        	    	$this->setState(19);
		        	    	$this->match(self::NL);
		        	    }
		        	    $this->setState(22);
		        	    $this->match(self::EOF);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function setVar() : Context\SetVarContext
		{
		    $localContext = new Context\SetVarContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 2, self::RULE_setVar);

		    try {
		        $localContext = new Context\SetVariableContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(26);
		        $this->match(self::ID);
		        $this->setState(27);
		        $this->match(self::EQUAL);
		        $this->setState(28);
		        $this->recursivePlusOrMinus(0);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function plusOrMinus() : Context\PlusOrMinusContext
		{
			return $this->recursivePlusOrMinus(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursivePlusOrMinus(int $precedence) : Context\PlusOrMinusContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\PlusOrMinusContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 4;
			$this->enterRecursionRule($localContext, 4, self::RULE_plusOrMinus, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$localContext = new Context\ToMultOrDivContext($localContext);
				$this->ctx = $localContext;
				$previousContext = $localContext;

				$this->setState(31);
				$this->recursiveMultOrDiv(0);
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(41);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 3, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(39);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 2, $this->ctx)) {
							case 1:
							    $localContext = new Context\PlusContext(new Context\PlusOrMinusContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_plusOrMinus);
							    $this->setState(33);

							    if (!($this->precpred($this->ctx, 3))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 3)");
							    }
							    $this->setState(34);
							    $this->match(self::PLUS);
							    $this->setState(35);
							    $this->recursiveMultOrDiv(0);
							break;

							case 2:
							    $localContext = new Context\MinusContext(new Context\PlusOrMinusContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_plusOrMinus);
							    $this->setState(36);

							    if (!($this->precpred($this->ctx, 2))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
							    }
							    $this->setState(37);
							    $this->match(self::MINUS);
							    $this->setState(38);
							    $this->recursiveMultOrDiv(0);
							break;
						} 
					}

					$this->setState(43);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 3, $this->ctx);
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->unrollRecursionContexts($parentContext);
			}

			return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function multOrDiv() : Context\MultOrDivContext
		{
			return $this->recursiveMultOrDiv(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveMultOrDiv(int $precedence) : Context\MultOrDivContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\MultOrDivContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 6;
			$this->enterRecursionRule($localContext, 6, self::RULE_multOrDiv, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$localContext = new Context\ToPowContext($localContext);
				$this->ctx = $localContext;
				$previousContext = $localContext;

				$this->setState(45);
				$this->exp();
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(55);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 5, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(53);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 4, $this->ctx)) {
							case 1:
							    $localContext = new Context\MultiplicationContext(new Context\MultOrDivContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_multOrDiv);
							    $this->setState(47);

							    if (!($this->precpred($this->ctx, 3))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 3)");
							    }
							    $this->setState(48);
							    $this->match(self::MULT);
							    $this->setState(49);
							    $this->exp();
							break;

							case 2:
							    $localContext = new Context\DivisionContext(new Context\MultOrDivContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_multOrDiv);
							    $this->setState(50);

							    if (!($this->precpred($this->ctx, 2))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
							    }
							    $this->setState(51);
							    $this->match(self::DIV);
							    $this->setState(52);
							    $this->exp();
							break;
						} 
					}

					$this->setState(57);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 5, $this->ctx);
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->unrollRecursionContexts($parentContext);
			}

			return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function exp() : Context\ExpContext
		{
		    $localContext = new Context\ExpContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_exp);

		    try {
		        $localContext = new Context\PowerContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(58);
		        $this->unaryMinus();
		        $this->setState(61);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 6, $this->ctx)) {
		            case 1:
		        	    $this->setState(59);
		        	    $this->match(self::POW);
		        	    $this->setState(60);
		        	    $this->exp();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function unaryMinus() : Context\UnaryMinusContext
		{
		    $localContext = new Context\UnaryMinusContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 10, self::RULE_unaryMinus);

		    try {
		        $this->setState(66);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::MINUS:
		            	$localContext = new Context\ChangeSignContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(63);
		            	$this->match(self::MINUS);
		            	$this->setState(64);
		            	$this->unaryMinus();
		            	break;

		            case self::INT:
		            case self::DOUBLE:
		            case self::PI:
		            case self::E:
		            case self::ID:
		            case self::LPAR:
		            	$localContext = new Context\ToAtomContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(65);
		            	$this->atom();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function atom() : Context\AtomContext
		{
		    $localContext = new Context\AtomContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 12, self::RULE_atom);

		    try {
		        $this->setState(77);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::PI:
		            	$localContext = new Context\ConstantPIContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(68);
		            	$this->match(self::PI);
		            	break;

		            case self::E:
		            	$localContext = new Context\ConstantEContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(69);
		            	$this->match(self::E);
		            	break;

		            case self::DOUBLE:
		            	$localContext = new Context\DoubleContext($localContext);
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(70);
		            	$this->match(self::DOUBLE);
		            	break;

		            case self::INT:
		            	$localContext = new Context\IntContext($localContext);
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(71);
		            	$this->match(self::INT);
		            	break;

		            case self::ID:
		            	$localContext = new Context\VariableContext($localContext);
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(72);
		            	$this->match(self::ID);
		            	break;

		            case self::LPAR:
		            	$localContext = new Context\BracesContext($localContext);
		            	$this->enterOuterAlt($localContext, 6);
		            	$this->setState(73);
		            	$this->match(self::LPAR);
		            	$this->setState(74);
		            	$this->recursivePlusOrMinus(0);
		            	$this->setState(75);
		            	$this->match(self::RPAR);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		public function sempred(?RuleContext $localContext, int $ruleIndex, int $predicateIndex) : bool
		{
			switch ($ruleIndex) {
					case 2:
						return $this->sempredPlusOrMinus($localContext, $predicateIndex);

					case 3:
						return $this->sempredMultOrDiv($localContext, $predicateIndex);

				default:
					return true;
				}
		}

		private function sempredPlusOrMinus(?Context\PlusOrMinusContext $localContext, int $predicateIndex) : bool
		{
			switch ($predicateIndex) {
			    case 0:
			        return $this->precpred($this->ctx, 3);

			    case 1:
			        return $this->precpred($this->ctx, 2);
			}

			return true;
		}

		private function sempredMultOrDiv(?Context\MultOrDivContext $localContext, int $predicateIndex) : bool
		{
			switch ($predicateIndex) {
			    case 2:
			        return $this->precpred($this->ctx, 3);

			    case 3:
			        return $this->precpred($this->ctx, 2);
			}

			return true;
		}
	}
}

namespace Antlr\Antlr4\Runtime\Test\Sample\Calculator\Antlr\Context {
	use Antlr\Antlr4\Runtime\ParserRuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
	use Antlr\Antlr4\Runtime\Tree\TerminalNode;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
	use Antlr\Antlr4\Runtime\Test\Sample\Calculator\Antlr\CalculatorParser;
	use Antlr\Antlr4\Runtime\Test\Sample\Calculator\Antlr\CalculatorParserVisitor;

	class InputContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return CalculatorParser::RULE_input;
	    }
	 
		public function copyFrom(ParserRuleContext $context) : void
		{
			parent::copyFrom($context);

		}
	}

	class CalculateContext extends InputContext
	{
		public function __construct(InputContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function plusOrMinus() : ?PlusOrMinusContext
	    {
	    	return $this->getTypedRuleContext(PlusOrMinusContext::class, 0);
	    }

	    public function EOF() : ?TerminalNode
	    {
	        return $this->getToken(CalculatorParser::EOF, 0);
	    }

	    public function NL() : ?TerminalNode
	    {
	        return $this->getToken(CalculatorParser::NL, 0);
	    }

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof CalculatorParserVisitor) {
			    return $visitor->visitCalculate($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ToSetVarContext extends InputContext
	{
		public function __construct(InputContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function setVar() : ?SetVarContext
	    {
	    	return $this->getTypedRuleContext(SetVarContext::class, 0);
	    }

	    public function NL() : ?TerminalNode
	    {
	        return $this->getToken(CalculatorParser::NL, 0);
	    }

	    public function input() : ?InputContext
	    {
	    	return $this->getTypedRuleContext(InputContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof CalculatorParserVisitor) {
			    return $visitor->visitToSetVar($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SetVarContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return CalculatorParser::RULE_setVar;
	    }
	 
		public function copyFrom(ParserRuleContext $context) : void
		{
			parent::copyFrom($context);

		}
	}

	class SetVariableContext extends SetVarContext
	{
		public function __construct(SetVarContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID() : ?TerminalNode
	    {
	        return $this->getToken(CalculatorParser::ID, 0);
	    }

	    public function EQUAL() : ?TerminalNode
	    {
	        return $this->getToken(CalculatorParser::EQUAL, 0);
	    }

	    public function plusOrMinus() : ?PlusOrMinusContext
	    {
	    	return $this->getTypedRuleContext(PlusOrMinusContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof CalculatorParserVisitor) {
			    return $visitor->visitSetVariable($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class PlusOrMinusContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return CalculatorParser::RULE_plusOrMinus;
	    }
	 
		public function copyFrom(ParserRuleContext $context) : void
		{
			parent::copyFrom($context);

		}
	}

	class ToMultOrDivContext extends PlusOrMinusContext
	{
		public function __construct(PlusOrMinusContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function multOrDiv() : ?MultOrDivContext
	    {
	    	return $this->getTypedRuleContext(MultOrDivContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof CalculatorParserVisitor) {
			    return $visitor->visitToMultOrDiv($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class PlusContext extends PlusOrMinusContext
	{
		public function __construct(PlusOrMinusContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function plusOrMinus() : ?PlusOrMinusContext
	    {
	    	return $this->getTypedRuleContext(PlusOrMinusContext::class, 0);
	    }

	    public function PLUS() : ?TerminalNode
	    {
	        return $this->getToken(CalculatorParser::PLUS, 0);
	    }

	    public function multOrDiv() : ?MultOrDivContext
	    {
	    	return $this->getTypedRuleContext(MultOrDivContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof CalculatorParserVisitor) {
			    return $visitor->visitPlus($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class MinusContext extends PlusOrMinusContext
	{
		public function __construct(PlusOrMinusContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function plusOrMinus() : ?PlusOrMinusContext
	    {
	    	return $this->getTypedRuleContext(PlusOrMinusContext::class, 0);
	    }

	    public function MINUS() : ?TerminalNode
	    {
	        return $this->getToken(CalculatorParser::MINUS, 0);
	    }

	    public function multOrDiv() : ?MultOrDivContext
	    {
	    	return $this->getTypedRuleContext(MultOrDivContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof CalculatorParserVisitor) {
			    return $visitor->visitMinus($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class MultOrDivContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return CalculatorParser::RULE_multOrDiv;
	    }
	 
		public function copyFrom(ParserRuleContext $context) : void
		{
			parent::copyFrom($context);

		}
	}

	class MultiplicationContext extends MultOrDivContext
	{
		public function __construct(MultOrDivContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function multOrDiv() : ?MultOrDivContext
	    {
	    	return $this->getTypedRuleContext(MultOrDivContext::class, 0);
	    }

	    public function MULT() : ?TerminalNode
	    {
	        return $this->getToken(CalculatorParser::MULT, 0);
	    }

	    public function exp() : ?ExpContext
	    {
	    	return $this->getTypedRuleContext(ExpContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof CalculatorParserVisitor) {
			    return $visitor->visitMultiplication($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class DivisionContext extends MultOrDivContext
	{
		public function __construct(MultOrDivContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function multOrDiv() : ?MultOrDivContext
	    {
	    	return $this->getTypedRuleContext(MultOrDivContext::class, 0);
	    }

	    public function DIV() : ?TerminalNode
	    {
	        return $this->getToken(CalculatorParser::DIV, 0);
	    }

	    public function exp() : ?ExpContext
	    {
	    	return $this->getTypedRuleContext(ExpContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof CalculatorParserVisitor) {
			    return $visitor->visitDivision($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ToPowContext extends MultOrDivContext
	{
		public function __construct(MultOrDivContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function exp() : ?ExpContext
	    {
	    	return $this->getTypedRuleContext(ExpContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof CalculatorParserVisitor) {
			    return $visitor->visitToPow($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExpContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return CalculatorParser::RULE_exp;
	    }
	 
		public function copyFrom(ParserRuleContext $context) : void
		{
			parent::copyFrom($context);

		}
	}

	class PowerContext extends ExpContext
	{
		public function __construct(ExpContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function unaryMinus() : ?UnaryMinusContext
	    {
	    	return $this->getTypedRuleContext(UnaryMinusContext::class, 0);
	    }

	    public function POW() : ?TerminalNode
	    {
	        return $this->getToken(CalculatorParser::POW, 0);
	    }

	    public function exp() : ?ExpContext
	    {
	    	return $this->getTypedRuleContext(ExpContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof CalculatorParserVisitor) {
			    return $visitor->visitPower($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class UnaryMinusContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return CalculatorParser::RULE_unaryMinus;
	    }
	 
		public function copyFrom(ParserRuleContext $context) : void
		{
			parent::copyFrom($context);

		}
	}

	class ChangeSignContext extends UnaryMinusContext
	{
		public function __construct(UnaryMinusContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function MINUS() : ?TerminalNode
	    {
	        return $this->getToken(CalculatorParser::MINUS, 0);
	    }

	    public function unaryMinus() : ?UnaryMinusContext
	    {
	    	return $this->getTypedRuleContext(UnaryMinusContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof CalculatorParserVisitor) {
			    return $visitor->visitChangeSign($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ToAtomContext extends UnaryMinusContext
	{
		public function __construct(UnaryMinusContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function atom() : ?AtomContext
	    {
	    	return $this->getTypedRuleContext(AtomContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof CalculatorParserVisitor) {
			    return $visitor->visitToAtom($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AtomContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return CalculatorParser::RULE_atom;
	    }
	 
		public function copyFrom(ParserRuleContext $context) : void
		{
			parent::copyFrom($context);

		}
	}

	class ConstantPIContext extends AtomContext
	{
		public function __construct(AtomContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function PI() : ?TerminalNode
	    {
	        return $this->getToken(CalculatorParser::PI, 0);
	    }

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof CalculatorParserVisitor) {
			    return $visitor->visitConstantPI($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class VariableContext extends AtomContext
	{
		public function __construct(AtomContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID() : ?TerminalNode
	    {
	        return $this->getToken(CalculatorParser::ID, 0);
	    }

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof CalculatorParserVisitor) {
			    return $visitor->visitVariable($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class BracesContext extends AtomContext
	{
		public function __construct(AtomContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function LPAR() : ?TerminalNode
	    {
	        return $this->getToken(CalculatorParser::LPAR, 0);
	    }

	    public function plusOrMinus() : ?PlusOrMinusContext
	    {
	    	return $this->getTypedRuleContext(PlusOrMinusContext::class, 0);
	    }

	    public function RPAR() : ?TerminalNode
	    {
	        return $this->getToken(CalculatorParser::RPAR, 0);
	    }

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof CalculatorParserVisitor) {
			    return $visitor->visitBraces($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ConstantEContext extends AtomContext
	{
		public function __construct(AtomContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function E() : ?TerminalNode
	    {
	        return $this->getToken(CalculatorParser::E, 0);
	    }

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof CalculatorParserVisitor) {
			    return $visitor->visitConstantE($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class DoubleContext extends AtomContext
	{
		public function __construct(AtomContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function DOUBLE() : ?TerminalNode
	    {
	        return $this->getToken(CalculatorParser::DOUBLE, 0);
	    }

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof CalculatorParserVisitor) {
			    return $visitor->visitDouble($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class IntContext extends AtomContext
	{
		public function __construct(AtomContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function INT() : ?TerminalNode
	    {
	        return $this->getToken(CalculatorParser::INT, 0);
	    }

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof CalculatorParserVisitor) {
			    return $visitor->visitInt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 
}