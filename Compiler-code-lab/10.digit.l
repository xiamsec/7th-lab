%option noyywrap
%{
 #include<stdio.h>
%}

%%
[0-9] {printf("%s: is a Digit",yytext);}
.* {printf("%s:is not a Digit",yytext);}
%%
int main()
{
  printf("Enter Any Digit:\n");
  yylex();
  return 0;
}