import time
import winsound

def play_rickroll_sound():
    winsound.Beep(440, 500)  # A4 note for 500ms
    winsound.Beep(466, 250)  # A#4 note for 250ms
    winsound.Beep(440, 250)  # A4 note for 250ms
    winsound.Beep(392, 500)  # G4 note for 500ms
    winsound.Beep(523, 500)  # C5 note for 500ms
    winsound.Beep(493, 250)  # B4 note for 250ms
    winsound.Beep(466, 250)  # A#4 note for 250ms
    winsound.Beep(440, 500)  # A4 note for 500ms
    winsound.Beep(587, 500)  # D5 note for 500ms
    winsound.Beep(587, 250)  # D5 note for 250ms
    winsound.Beep(554, 250)  # C#5 note for 250ms
    winsound.Beep(523, 500)  # C5 note for 500ms
    winsound.Beep(587, 500)  # D5 note for 500ms
    winsound.Beep(659, 250)  # E5 note for 250ms
    winsound.Beep(622, 250)  # D#5 note for 250ms
    winsound.Beep(587, 500)  # D5 note for 500ms

def main():
    print("Press any key to type. To exit the prank, press 'q'.")

    while True:
        key = input()
        
        if key.lower() == 'q':
            break

        if key == ' ':
            print("Rick Coll Playing")
            play_rickroll_sound()
        else:
            print(key)

if __name__ == '__main__':
    main()