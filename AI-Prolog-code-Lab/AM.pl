% Addition of two numbers----

go:- write('Enter the first number: '),read(X),nl,
     write('Enter the second number: '),read(Y),nl,
     summultiplication(X,Y).

summultiplication(X,Y):-
     S is X+Y,
     M is X*Y,
     write('Summation is :  '),write(S),nl,
     write('Product is :  '),write(M),nl.
