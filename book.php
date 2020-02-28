<?php include '_header.php'; ?>

<main class="bookMain">
    <h1>Book a Cruise</h1>
    <form>
        <label for="fname">Full name:</label><br>
        <input type="required" id="fname" name="fname" placeholder="Joe Shmoe" required/><br>
        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address" placeholder="123 Boulevard Ln"/><br>
        <label for="city">City:</label><br>
        <input type="text" id="city" name="city" placeholder="Provo"/><br>
        <label for="state">State:</label><br>
        <select type="text" id="state" name="state" >
            <option >Alabama</option>
            <option >Alaska</option>
            <option >Arizona</option>
            <option >Arkansas</option>
            <option >California</option>
            <option >Colorado</option>
            <option >Connecticut</option>
            <option >Delaware</option>
            <option >Florida</option>
            <option >Georgia</option>
            <option >Hawaii</option>
            <option >Idaho</option>
            <option >Illinois</option>
            <option>Indiana</option>
            <option >Iowa</option>
            <option >Kansas</option>
            <option >Kentucky</option>
            <option >Louisiana</option>
            <option >Maine</option>
            <option >Maryland</option>
            <option >Massachusetts</option>
            <option >Michigan</option>
            <option >Minnesota</option>
            <option >Mississippi</option>
            <option >Missouri</option>
            <option >Montana</option>
            <option>Nebraska</option>
            <option >Nevada</option>
            <option >New Hampshire</option>
            <option >New Jersey</option>
            <option >New Mexico</option>
            <option >New York</option>
            <option >North Carolina</option>
            <option >North Dakota</option>
            <option >Ohio</option>
            <option >Oklahoma</option>
            <option >Oregon</option>
            <option >Pennsylvania</option>
            <option>Rhode Island</option>
            <option >South Carolina</option>
            <option >South Dakota</option>
            <option >Tennessee</option>
            <option >Texas</option>
            <option >Utah</option>
            <option >Vermont</option>
            <option >Virginia</option>
            <option >Washington</option>
            <option >West Virginia</option>
            <option >Wisconsin</option>
            <option >Wyoming</option>
        </select><br>
        <label for="zip">Zipcode:</label><br>
        <input type="text" id="zip" name="zip" placeholder="84604"/><br>
        <label for="phone">Phone Number:</label><br>
        <input type="text" id="phone" name="phone" placeholder="(801) 867-5309"/><br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email" placeholder="email@email.com" required/><br>
        <label for="cruise">Cruise Selection:</label><br>
        <select type="text" id="cruise" name="cruise">
            <option>Alaska</option>
            <option>California</option>
            <option>Mediterranean</option>
            <option>North Asia</option>
            <option>South Asia</option>
            <option>Caribbean</option>
            <option>West Africa</option>
            <option>South Africa</option>
            <option>Greece</option>
            <option>Mexico</option>
        </select><br />
        <button type="submit">Book Your Cruise!</button>
    </form>
</main>

<?php include '_footer.php'; ?>