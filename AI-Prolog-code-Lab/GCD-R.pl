go :-
    write("Enter the first input X1: "),
    read(X1),
    write("Enter the second input X2: "),
    read(X2),
    gcd(X1, X2, Result),
    write("GCD is: "), write(Result), nl.

% Base cases
gcd(X, 0, X) :- !.
gcd(0, X, X) :- !.

% Recursive case using Euclid's algorithm
gcd(X, Y, Result) :-
    X > Y,
    R is X mod Y,
    gcd(Y, R, Result).
gcd(X, Y, Result) :-
    X =< Y,
    gcd(Y, X, Result).
