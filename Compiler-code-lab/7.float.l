%option noyywrap

%{
 #include<stdio.h>
%}

%%
[0-9]*[.][0-9]+ {printf("%s:is a float number\n",yytext);}
[0-9]* {printf("%s:is a integer number\n",yytext);}
.* {printf("Invalid Number\n");}
%%

int main()
{
  printf("Enter Any Number:");
  yylex();
  return 0;

}