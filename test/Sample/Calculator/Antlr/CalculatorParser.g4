parser grammar CalculatorParser;

options { tokenVocab=CalculatorLexer; }

input
    : setVar NL input     # ToSetVar
    | plusOrMinus NL? EOF # Calculate
    ;

setVar
    : ID EQUAL plusOrMinus # SetVariable
    ;

plusOrMinus
    : plusOrMinus PLUS multOrDiv  # Plus
    | plusOrMinus MINUS multOrDiv # Minus
    | multOrDiv                   # ToMultOrDiv
    ;

multOrDiv
    : multOrDiv MULT exp # Multiplication
    | multOrDiv DIV exp  # Division
    | exp                # ToPow
    ;

exp
    : unaryMinus (POW exp)? # Power
    ;

unaryMinus
    : MINUS unaryMinus # ChangeSign
    | atom             # ToAtom
    ;

atom
    : PI                    # ConstantPI
    | E                     # ConstantE
    | DOUBLE                # Double
    | INT                   # Int
    | ID                    # Variable
    | LPAR plusOrMinus RPAR # Braces
    ;
