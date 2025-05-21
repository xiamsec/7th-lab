import turtle

def bresenham(x1, y1, x2, y2):
    dx = abs(x2 - x1)
    dy = abs(y2 - y1)
    sx = 1 if x2 > x1 else -1
    sy = 1 if y2 > y1 else -1
    err = dx - dy
    x, y = x1, y1

    turtle.penup()
    turtle.goto(x, y)
    turtle.pendown()
    while True:
        turtle.goto(x, y)
        if x == x2 and y == y2:
            break
        e2 = 2 * err
        if e2 > -dy:
            err -= dy
            x += sx
        if e2 < dx:
            err += dx
            y += sy

turtle.speed(0)
bresenham(-100, 0, 100, 80)
turtle.done()