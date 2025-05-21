import turtle

def fill_rect(x0, y0, x1, y1, gap=10):
    y = min(y0, y1)
    while y <= max(y0, y1):
        turtle.penup(); turtle.goto(x0, y)
        turtle.pendown(); turtle.goto(x1, y)
        y += gap

turtle.speed(0)
fill_rect(-100, -50, 100, 50)
turtle.done()