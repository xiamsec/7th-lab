import turtle

def plot4(cx, cy, x, y):
    for dx, dy in [( x, y),(-x, y),(-x,-y),( x,-y)]:
        turtle.goto(cx+dx, cy+dy)
        turtle.dot()

def midpoint_ellipse(cx, cy, a, b):
    x, y = 0, b
    a2, b2 = a*a, b*b
    d1 = b2 - a2*b + 0.25*a2
    dx, dy = 2*b2*x, 2*a2*y

    turtle.penup()
    plot4(cx, cy, x, y)
    turtle.pendown()
    # Region 1
    while dx < dy:
        x += 1
        dx += 2*b2
        if d1 < 0:
            d1 += dx + b2
        else:
            y -= 1
            dy -= 2*a2
            d1 += dx - dy + b2
        plot4(cx, cy, x, y)
    # Region 2
    d2 = b2*(x+0.5)**2 + a2*(y-1)**2 - a2*b2
    while y > 0:
        y -= 1
        dy -= 2*a2
        if d2 > 0:
            d2 += a2 - dy
        else:
            x += 1
            dx += 2*b2
            d2 += dx - dy + a2
        plot4(cx, cy, x, y)

turtle.speed(0)
midpoint_ellipse(0, 0, 100, 50)
turtle.done()