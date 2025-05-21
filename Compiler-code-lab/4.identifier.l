%option noyywrap
%{
    /*Define section*/
    #include <stdio.h>
%}
    /*Rule section*/
%%
[a-zA-Z][0-9]+[_]+[a-zA-Z]* {printf("%s is a identifier\n",yytext);}
^[0-9]+ {printf("%s is not a identifier\n");}
.|\n;
%%
    int main()
{
	printf(“Enter Chaecter”);
	yytext();
    return 0;
}
