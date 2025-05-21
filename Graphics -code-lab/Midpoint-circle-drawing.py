import turtle

def plot8(cx, cy, x, y):
    for dx, dy in [(x,y),(y,x),(-x,y),(-y,x),(-x,-y),(-y,-x),(x,-y),(y,-x)]:
        turtle.goto(cx+dx, cy+dy); turtle.dot()

def bresenham_circle(cx, cy, r):
    x, y, d = 0, r, 3 - 2*r
    plot8(cx, cy, x, y)
    while x < y:
        if d < 0:
            d += 4*x + 6
        else:
            d += 4*(x-y) + 10
            y -= 1
        x += 1
        plot8(cx, cy, x, y)

turtle.speed(0)
bresenham_circle(0, 0, 80)
turtle.done()