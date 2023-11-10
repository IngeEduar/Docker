import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        ShoppingCart cart = new ShoppingCart();

        while (true) {
            System.out.println("Ingrese el nombre del producto (o escriba 'fin' para finalizar):");
            String productName = scanner.nextLine();

            if (productName.equalsIgnoreCase("fin")) {
                break;
            }

            System.out.println("Ingrese el precio del producto:");
            double productPrice = Double.parseDouble(scanner.nextLine());

            Product product = new Product(productName, productPrice);
            cart.addProduct(product);
        }

        System.out.println("Carrito de Compras:");
        for (Product product : cart.getItems()) {
            System.out.println(product);
        }

        System.out.println("Total: $" + cart.calculateTotal());
    }
}

