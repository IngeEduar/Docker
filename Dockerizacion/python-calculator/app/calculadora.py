def suma(a, b):
    return a + b

def resta(a, b):
    return a - b

def multiplicacion(a, b):
    return a * b

def division(a, b):
    if b != 0:
        return a / b
    else:
        return "Error: No es posible dividir por cero."

while True:
    print("Opciones:")
    print("Escribe 'salir' para terminar el programa.")
    print("Escribe 'suma' para sumar dos números.")
    print("Escribe 'resta' para restar dos números.")
    print("Escribe 'multiplicacion' para multiplicar dos números.")
    print("Escribe 'division' para dividir dos números.")

    user_input = input(": ")

    if user_input == "salir":
        break
    elif user_input in ("suma", "resta", "multiplicacion", "division"):
        num1 = float(input("Ingresa el primer número: "))
        num2 = float(input("Ingresa el segundo número: "))

        if user_input == "suma":
            print("Resultado:", suma(num1, num2))
        elif user_input == "resta":
            print("Resultado:", resta(num1, num2))
        elif user_input == "multiplicacion":
            print("Resultado:", multiplicacion(num1, num2))
        elif user_input == "division":
            print("Resultado:", division(num1, num2))
    else:
        print("Opción no válida")
