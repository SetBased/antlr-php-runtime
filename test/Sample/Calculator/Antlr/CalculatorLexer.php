<?php

/*
 * Generated from test/Sample/Calculator/Antlr/CalculatorLexer.g4 by ANTLR 4.9
 */

namespace Antlr\Antlr4\Runtime\Test\Sample\Calculator\Antlr {
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\LexerATNSimulator;
	use Antlr\Antlr4\Runtime\Lexer;
	use Antlr\Antlr4\Runtime\CharStream;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\VocabularyImpl;

	final class CalculatorLexer extends Lexer
	{
		public const INT = 1, DOUBLE = 2, PI = 3, E = 4, POW = 5, NL = 6, WS = 7, 
               ID = 8, PLUS = 9, EQUAL = 10, MINUS = 11, MULT = 12, DIV = 13, 
               LPAR = 14, RPAR = 15;

		/**
		 * @var array<string>
		 */
		public const CHANNEL_NAMES = [
			'DEFAULT_TOKEN_CHANNEL', 'HIDDEN'
		];

		/**
		 * @var array<string>
		 */
		public const MODE_NAMES = [
			'DEFAULT_MODE'
		];

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'INT', 'DOUBLE', 'PI', 'E', 'POW', 'NL', 'WS', 'ID', 'PLUS', 'EQUAL', 
			'MINUS', 'MULT', 'DIV', 'LPAR', 'RPAR'
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
		    "\u{2}\u{11}\u{56}\u{8}\u{1}\u{4}\u{2}\u{9}\u{2}\u{4}\u{3}\u{9}\u{3}" .
		    "\u{4}\u{4}\u{9}\u{4}\u{4}\u{5}\u{9}\u{5}\u{4}\u{6}\u{9}\u{6}\u{4}" .
		    "\u{7}\u{9}\u{7}\u{4}\u{8}\u{9}\u{8}\u{4}\u{9}\u{9}\u{9}\u{4}\u{A}" .
		    "\u{9}\u{A}\u{4}\u{B}\u{9}\u{B}\u{4}\u{C}\u{9}\u{C}\u{4}\u{D}\u{9}" .
		    "\u{D}\u{4}\u{E}\u{9}\u{E}\u{4}\u{F}\u{9}\u{F}\u{4}\u{10}\u{9}\u{10}" .
		    "\u{3}\u{2}\u{6}\u{2}\u{23}\u{A}\u{2}\u{D}\u{2}\u{E}\u{2}\u{24}\u{3}" .
		    "\u{3}\u{6}\u{3}\u{28}\u{A}\u{3}\u{D}\u{3}\u{E}\u{3}\u{29}\u{3}\u{3}" .
		    "\u{3}\u{3}\u{6}\u{3}\u{2E}\u{A}\u{3}\u{D}\u{3}\u{E}\u{3}\u{2F}\u{3}" .
		    "\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{5}\u{3}\u{5}\u{3}\u{6}\u{3}\u{6}" .
		    "\u{3}\u{7}\u{3}\u{7}\u{3}\u{8}\u{6}\u{8}\u{3C}\u{A}\u{8}\u{D}\u{8}" .
		    "\u{E}\u{8}\u{3D}\u{3}\u{8}\u{3}\u{8}\u{3}\u{9}\u{3}\u{9}\u{7}\u{9}" .
		    "\u{44}\u{A}\u{9}\u{C}\u{9}\u{E}\u{9}\u{47}\u{B}\u{9}\u{3}\u{A}\u{3}" .
		    "\u{A}\u{3}\u{B}\u{3}\u{B}\u{3}\u{C}\u{3}\u{C}\u{3}\u{D}\u{3}\u{D}" .
		    "\u{3}\u{E}\u{3}\u{E}\u{3}\u{F}\u{3}\u{F}\u{3}\u{10}\u{3}\u{10}\u{2}" .
		    "\u{2}\u{11}\u{3}\u{3}\u{5}\u{4}\u{7}\u{5}\u{9}\u{6}\u{B}\u{7}\u{D}" .
		    "\u{8}\u{F}\u{9}\u{11}\u{A}\u{13}\u{B}\u{15}\u{C}\u{17}\u{D}\u{19}" .
		    "\u{E}\u{1B}\u{F}\u{1D}\u{10}\u{1F}\u{11}\u{3}\u{2}\u{6}\u{3}\u{2}" .
		    "\u{32}\u{3B}\u{5}\u{2}\u{B}\u{C}\u{F}\u{F}\u{22}\u{22}\u{5}\u{2}\u{43}" .
		    "\u{5C}\u{61}\u{61}\u{63}\u{7C}\u{6}\u{2}\u{32}\u{3B}\u{43}\u{5C}\u{61}" .
		    "\u{61}\u{63}\u{7C}\u{2}\u{5A}\u{2}\u{3}\u{3}\u{2}\u{2}\u{2}\u{2}\u{5}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{2}\u{7}\u{3}\u{2}\u{2}\u{2}\u{2}\u{9}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{2}\u{B}\u{3}\u{2}\u{2}\u{2}\u{2}\u{D}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{2}\u{F}\u{3}\u{2}\u{2}\u{2}\u{2}\u{11}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{2}\u{13}\u{3}\u{2}\u{2}\u{2}\u{2}\u{15}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{2}\u{17}\u{3}\u{2}\u{2}\u{2}\u{2}\u{19}\u{3}\u{2}\u{2}\u{2}\u{2}" .
		    "\u{1B}\u{3}\u{2}\u{2}\u{2}\u{2}\u{1D}\u{3}\u{2}\u{2}\u{2}\u{2}\u{1F}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{3}\u{22}\u{3}\u{2}\u{2}\u{2}\u{5}\u{27}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{7}\u{31}\u{3}\u{2}\u{2}\u{2}\u{9}\u{34}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{B}\u{36}\u{3}\u{2}\u{2}\u{2}\u{D}\u{38}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{F}\u{3B}\u{3}\u{2}\u{2}\u{2}\u{11}\u{41}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{13}\u{48}\u{3}\u{2}\u{2}\u{2}\u{15}\u{4A}\u{3}\u{2}\u{2}\u{2}\u{17}" .
		    "\u{4C}\u{3}\u{2}\u{2}\u{2}\u{19}\u{4E}\u{3}\u{2}\u{2}\u{2}\u{1B}\u{50}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{1D}\u{52}\u{3}\u{2}\u{2}\u{2}\u{1F}\u{54}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{21}\u{23}\u{9}\u{2}\u{2}\u{2}\u{22}\u{21}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{23}\u{24}\u{3}\u{2}\u{2}\u{2}\u{24}\u{22}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{24}\u{25}\u{3}\u{2}\u{2}\u{2}\u{25}\u{4}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{26}\u{28}\u{9}\u{2}\u{2}\u{2}\u{27}\u{26}\u{3}\u{2}\u{2}\u{2}\u{28}" .
		    "\u{29}\u{3}\u{2}\u{2}\u{2}\u{29}\u{27}\u{3}\u{2}\u{2}\u{2}\u{29}\u{2A}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{2A}\u{2B}\u{3}\u{2}\u{2}\u{2}\u{2B}\u{2D}\u{7}" .
		    "\u{30}\u{2}\u{2}\u{2C}\u{2E}\u{9}\u{2}\u{2}\u{2}\u{2D}\u{2C}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{2E}\u{2F}\u{3}\u{2}\u{2}\u{2}\u{2F}\u{2D}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{2F}\u{30}\u{3}\u{2}\u{2}\u{2}\u{30}\u{6}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{31}\u{32}\u{7}\u{72}\u{2}\u{2}\u{32}\u{33}\u{7}\u{6B}\u{2}" .
		    "\u{2}\u{33}\u{8}\u{3}\u{2}\u{2}\u{2}\u{34}\u{35}\u{7}\u{67}\u{2}\u{2}" .
		    "\u{35}\u{A}\u{3}\u{2}\u{2}\u{2}\u{36}\u{37}\u{7}\u{60}\u{2}\u{2}\u{37}" .
		    "\u{C}\u{3}\u{2}\u{2}\u{2}\u{38}\u{39}\u{7}\u{C}\u{2}\u{2}\u{39}\u{E}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{3A}\u{3C}\u{9}\u{3}\u{2}\u{2}\u{3B}\u{3A}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{3C}\u{3D}\u{3}\u{2}\u{2}\u{2}\u{3D}\u{3B}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{3D}\u{3E}\u{3}\u{2}\u{2}\u{2}\u{3E}\u{3F}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{3F}\u{40}\u{8}\u{8}\u{2}\u{2}\u{40}\u{10}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{41}\u{45}\u{9}\u{4}\u{2}\u{2}\u{42}\u{44}\u{9}\u{5}\u{2}\u{2}\u{43}" .
		    "\u{42}\u{3}\u{2}\u{2}\u{2}\u{44}\u{47}\u{3}\u{2}\u{2}\u{2}\u{45}\u{43}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{45}\u{46}\u{3}\u{2}\u{2}\u{2}\u{46}\u{12}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{47}\u{45}\u{3}\u{2}\u{2}\u{2}\u{48}\u{49}\u{7}\u{2D}" .
		    "\u{2}\u{2}\u{49}\u{14}\u{3}\u{2}\u{2}\u{2}\u{4A}\u{4B}\u{7}\u{3F}" .
		    "\u{2}\u{2}\u{4B}\u{16}\u{3}\u{2}\u{2}\u{2}\u{4C}\u{4D}\u{7}\u{2F}" .
		    "\u{2}\u{2}\u{4D}\u{18}\u{3}\u{2}\u{2}\u{2}\u{4E}\u{4F}\u{7}\u{2C}" .
		    "\u{2}\u{2}\u{4F}\u{1A}\u{3}\u{2}\u{2}\u{2}\u{50}\u{51}\u{7}\u{31}" .
		    "\u{2}\u{2}\u{51}\u{1C}\u{3}\u{2}\u{2}\u{2}\u{52}\u{53}\u{7}\u{2A}" .
		    "\u{2}\u{2}\u{53}\u{1E}\u{3}\u{2}\u{2}\u{2}\u{54}\u{55}\u{7}\u{2B}" .
		    "\u{2}\u{2}\u{55}\u{20}\u{3}\u{2}\u{2}\u{2}\u{8}\u{2}\u{24}\u{29}\u{2F}" .
		    "\u{3D}\u{45}\u{3}\u{8}\u{2}\u{2}";

		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;
		public function __construct(CharStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new LexerATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
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

		public static function vocabulary() : Vocabulary
		{
			static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
		}

		public function getGrammarFileName() : string
		{
			return 'CalculatorLexer.g4';
		}

		public function getRuleNames() : array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN() : string
		{
			return self::SERIALIZED_ATN;
		}

		/**
		 * @return array<string>
		 */
		public function getChannelNames() : array
		{
			return self::CHANNEL_NAMES;
		}

		/**
		 * @return array<string>
		 */
		public function getModeNames() : array
		{
			return self::MODE_NAMES;
		}

		public function getATN() : ATN
		{
			return self::$atn;
		}

		public function getVocabulary() : Vocabulary
		{
			return self::vocabulary();
		}
	}
}