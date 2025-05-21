%option noyywrap

%{
 #include<stdio.h>
%}
%%
^-[0-9]+ {printf("Negative Integer Number\n",yytext);}
[+]?[0-9]+ {printf("Positive Integer number\n",yytext);}
^-[0-9]*[.][0-9]+ {printf("Negative Float Number\n",yytext);}
[+]?[0-9]*[.][0-9]+ {printf("Positive Float Number\n",yytext);}
.* {printf("Invalid Number\n");}
%%
int main()
{
    printf("Enter Any Number:\n");
    yylex();
    return 0;
}