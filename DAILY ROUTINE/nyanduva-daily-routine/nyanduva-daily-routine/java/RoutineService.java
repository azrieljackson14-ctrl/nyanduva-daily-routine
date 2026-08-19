public class RoutineService {
    private String[] routine;

    public RoutineService() {
        this.routine = new String[]{
            "06:00 AM - Wake up & Morning prayers",
            "06:30 AM - Take a bath & get ready",
            "07:00 AM - Breakfast",
            "07:30 AM - Leave for work",
            "08:00 AM - 12:00 PM - Work (Morning shift)",
            "12:00 PM - 01:00 PM - Lunch break",
            "01:00 PM - 05:00 PM - Work (Afternoon shift)",
            "05:30 PM - Return home & rest",
            "06:30 PM - Free time / Errands",
            "07:30 PM - Dinner",
            "08:30 PM - Bible study & prayer",
            "09:15 PM - Relax / Family time",
            "10:00 PM - Sleep"
        };
    }

    public String[] getRoutine() {
        return routine;
    }
}