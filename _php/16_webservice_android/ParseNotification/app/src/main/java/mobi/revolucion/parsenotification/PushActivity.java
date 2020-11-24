package mobi.revolucion.parsenotification;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.Menu;
import android.view.MenuItem;


public class PushActivity extends Activity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_push);

        Intent intent = getIntent();
        String sound = intent.getStringExtra("alert");
        String badge = intent.getStringExtra("badge");

        //Log.i("no", sound.toString());


        /*
*
* {
    "alert": "TheMetsscored!",
    "badge": "Increment",
    "sound": "cheering.caf"
}

http://stackoverflow.com/questions/26154855/exception-when-opening-parse-push-notification
*/
    }



}
