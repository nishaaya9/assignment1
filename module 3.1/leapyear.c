#include <stdio.h>
int main()
{
    int year;
    printf("enter a year : ");
    scanf("%d", &year);
    if (year % 4 == 0)
    {
        if (year % 100 == 0)
        {
            if (year % 400 == 0)
            {
                printf("This year is a leap year.........");
            }
            else
            {
                printf("This year is not a leap year");
            }
        }
        else
        {
            printf("This year is a leap year");
        }
    }
    else
    {
        printf("........This year is not a leap year");
    }

    return 0;
}