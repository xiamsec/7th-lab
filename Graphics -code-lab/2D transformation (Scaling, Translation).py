import turtle

def draw(pts):
    turtle.penup()
    turtle.goto(pts[0])
    turtle.pendown()
    for x, y in pts[1:]+[pts[0]]:
        turtle.goto(x, y)

def scale(pts, sx, sy, cx=0, cy=0):
    return [((x-cx)*sx+cx, (y-cy)*sy+cy) for x, y in pts]

def translate(pts, dx, dy):
    return [(x+dx, y+dy) for x, y in pts]

turtle.speed(0)
tri = [(-30,0),(30,0),(0,60)]
draw(tri)
draw(scale(tri, 1.5, 0.5))
draw(translate(tri, -100, 0))
turtle.done()