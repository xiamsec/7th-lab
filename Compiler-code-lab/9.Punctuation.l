%option noyywrap

%{
 #include<stdio.h>
%}

%%
[.,;:!?'"(){}\[\]<>\-_@#$%^&*+/=|~`\\] {printf("%s:is a punctuation symbol\n",yytext);}
[a-zA-Z0-9] {printf("%s:is not a punctuation\n",yytext);}
%%
int main()
{
  printf("Enter any text/symbol :\n");
  yylex();
  return 0;
}