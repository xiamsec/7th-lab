%{
#include <stdio.h>
%}

%%
is|am|are|were|go                           { printf("VERB: %s\n", yytext); }
very|simply|quickly|gently                  { printf("ADVERB: %s\n", yytext); }
to|from|behind|between                      { printf("PREPOSITION: %s\n", yytext); }
if|then                                     { printf("CONJUNCTION: %s\n", yytext); }
good|bad|tall|small|beautiful|happy         { printf("ADJECTIVE: %s\n", yytext); }
I|you|he|she|we|they|it|me|us|him|her|them  { printf("PRONOUN: %s\n", yytext); }
[ \t\n]+                                    { /* ignore whitespace */ }
.                                           { printf("UNKNOWN: %s\n", yytext); }
%%

int yywrap() 
{
    return 1;
}

int main() 
{
    printf("Enter text:\n");
    yylex();
    return 0;
}
