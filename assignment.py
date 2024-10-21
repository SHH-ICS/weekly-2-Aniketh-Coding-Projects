import math

diameter = float(input("Enter the diameter of the circle: "))

radius = diameter / 2

area = math.pi * radius ** 2

circumference = 2 * math.pi * radius

print(f"Area of the circle: {area:.2f}")
print(f"Circumference of the circle: {circumference:.2f}")

