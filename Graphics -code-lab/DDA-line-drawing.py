import turtle

def dda(x1, y1, x2, y2):
    dx = x2 - x1
    dy = y2 - y1
    steps = int(max(abs(dx), abs(dy)))
    x_inc = dx / steps
    y_inc = dy / steps
    x, y = x1, y1

    turtle.penup()
    turtle.goto(x, y)
    turtle.pendown()
    for _ in range(steps):
        turtle.goto(round(x), round(y))
        x += x_inc
        y += y_inc

turtle.speed(0)
dda(-100, -50, 100, 50)
turtle.done()