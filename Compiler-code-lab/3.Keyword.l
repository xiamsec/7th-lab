%option noyywrap

%{
    /*Define section*/
    #include <stdio.h>
%}
    /*Rule section*/
%%
[\t]+
auto | break | case | char | const | continue | default | do | double | else | enum | extern | float | for | goto | if | int | long | register | return | short | signed | sizeof | static | struct | switch | typedef | union | unsigned | void | volatile | while |
go {printf("%s is a keyword\n",yytext);}
[a-zA-Z]+ {printf("%s is not a keyword\n",yytext);}
[0-9]+ {printf("%s is a number\n",yytext);}
.|\n {ECHO;/* Normal default action */}

%%
int main()
{
    printf("Enter a keyword: ");
    yylex();
    return 0;
}