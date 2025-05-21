import turtle, math

def draw(pts):
    turtle.penup(); turtle.goto(pts[0]); turtle.pendown()
    for p in pts[1:]+[pts[0]]: turtle.goto(p)

def composite(pts, dx, dy, ang):
    moved = [(x+dx, y+dy) for x,y in pts]
    θ = math.radians(ang)
    return [(x*math.cos(θ)-y*math.sin(θ),
             x*math.sin(θ)+y*math.cos(θ))
            for x,y in moved]

turtle.speed(0)
poly = [(-50,-20),(0,50),(50,20),(20,-50)]
draw(poly)
draw(composite(poly, 80, 40, 30))
turtle.done()