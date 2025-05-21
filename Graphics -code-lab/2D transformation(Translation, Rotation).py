import turtle, math

def draw(pts):
    turtle.penup()
    turtle.goto(pts[0])
    turtle.pendown()
    for x, y in pts[1:]+[pts[0]]:
        turtle.goto(x, y)

def translate(pts, dx, dy):
    return [(x+dx, y+dy) for x, y in pts]

def rotate(pts, ang, cx=0, cy=0):
    θ = math.radians(ang)
    out = []
    for x, y in pts:
        x0, y0 = x-cx, y-cy
        out.append((x0*math.cos(θ)-y0*math.sin(θ)+cx,
                    x0*math.sin(θ)+y0*math.cos(θ)+cy))
    return out

turtle.speed(0)
square = [(-40,-40),(40,-40),(40,40),(-40,40)]
draw(square)
draw(translate(square, 100, 0))
draw(rotate(square, 45))
turtle.done()