%option noyywrap

%{
    #include <stdio.h>
%}

%%
[\t ]+
is |
am |
are |
were |
was |
be |
has |
have |
had |
go {printf("%s: is a verb\n",yytext);}
[a-zA-Z]+ {printf("%s: is not a verb\n",yytext);}
.|\n {ECHO;/*normal default anyway*/}
%% 

int main()
{
    printf("Enter a verb:\n");
    yylex();
    return 0;
}

