<style>

    div {
        display: flex;
        justify-content: center;
    }

    form * {
        display: inline-block;
        width: 300px;
    }

    .but {
        height: 30px;
        width: 604px;
    }
</style>

<div>
    <form action="" method="post">
        <label>Departure Airport:
            <select name="departureAirport" required>
                <option value="">-- select Departure Airport --</option>
                <?php
                foreach ($airportsList as $keyIndex => $airportsData) {
                    echo '<option value="' . $keyIndex . '">' . $airportsData['name'] . '</option>';
                }
                ?>
            </select>
        </label>

        <label>Arrival Airport:
            <select name="arrivalAirport" required>
                <option value="">-- select Arrival Airport --</option>
                <?php
                foreach ($airportsList as $keyIndex => $airportsData) {
                    echo '<option value="' . $keyIndex . '">' . $airportsData['name'] . '</option>';
                }
                ?>
            </select>
        </label>

        <br><br>
        <label>Departure (date time):
            <input type="datetime-local" name="departureTime" required>
        </label>

        <label>Arrival (date time):
            <input type="datetime-local" name="arrivalTime" required>
        </label>

        <br><br>

        <label>Ticket price (EURO):
            <input type="number" min="0" step="0.01" name="ticketPrice" required >
        </label>

        <br><br>
        <input class="but" type="submit" name="generatePDF" value="Generate PDF">
    </form>
</div>

<div>
</div>