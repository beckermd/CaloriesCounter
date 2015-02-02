import java.util.ArrayList;
import java.util.List;

public class Lottery {


    public static void main(String[] args) {

        FriendsList friend1 = new FriendsList();
        friend1.setName("Daniela");
        friend1.setEmail("abc@gmail.com");

        FriendsList friend2 = new FriendsList();
        friend2.setName("Maria");
        friend2.setEmail("fre@gmail.com");

        FriendsList friend3 = new FriendsList();
        friend3.setName("Nola");
        friend3.setEmail("cde@gmail.com");

       List<FriendsList> names = new ArrayList<FriendsList>();

        names.add(friend1);
        names.add(friend2);
        names.add(friend3);

        System.out.println(names.get(names.size() - 1).getName() + " regala a " + names.get(0).getName());

        for (int i = 0; i < names.size() - 1; i++) {

            System.out.println(names.get(i).getName() + " regala a " + names.get(i + 1).getName());
        }


    }

}
