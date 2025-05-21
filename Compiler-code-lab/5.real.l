%option noyywrap

%{
  #include <stdio.h>
%}

%%
[0-9]+|[0-9]\.[0-9] {printf("%s:is a real number",yytext);}

.* {printf("%s:is not a real number",yytext);}
%%

int main()
{
  printf{"Enter Any Number:");}
  yylex();
  return 0;
}