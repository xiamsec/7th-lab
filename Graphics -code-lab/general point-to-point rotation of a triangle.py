import turtle, math

def draw(pts):
    turtle.penup(); turtle.goto(pts[0]); turtle.pendown()
    for p in pts[1:]+[pts[0]]: turtle.goto(p)

def rotate_about(pts, ang, px, py):
    θ = math.radians(ang)
    return [(
        (x-px)*math.cos(θ)-(y-py)*math.sin(θ)+px,
        (x-px)*math.sin(θ)+(y-py)*math.cos(θ)+py
    ) for x,y in pts]

turtle.speed(0)
tri = [(0,0),(80,0),(40,60)]
draw(tri)
pivot = (120, 40)
turtle.goto(pivot); turtle.dot()
draw(rotate_about(tri, 45, *pivot))
turtle.done()