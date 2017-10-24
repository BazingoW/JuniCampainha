#include<stdio.h>
#include<stdlib.h>
#include<string.h>
#include<time.h>
int main()
{

    FILE *in;
    char *p;
    char buff[512];
    int id=6;
    int len;
    char str[200]= "curl -s http://web.tecnico.ulisboa.pt/ist181138/Junitec/isdingdong.php/";
    char str2[200]  = "curl -s http://web.tecnico.ulisboa.pt/ist181138/Junitec/dingdongoff.php/";


    while (1) {

      if(!(in = popen(str, "r")))
       {
          return 0;
       }

      while(fgets(buff, sizeof(buff), in)!=NULL)
       {
           //printf("%s\n",buff);



      }
      pclose(in);

      if (strstr(buff, "true") != NULL) {

      printf("\aDingDong!\n");
      usleep(500000);  // sleep(0.5s)
      //sleep(1);

      printf("\a\n");
      sleep(1);
      printf("\a\n");
      sleep(1);
      printf("\a\n");

      if(!(in = popen(str2, "r")))
       {
          return 0;
       }

      while(fgets(buff, sizeof(buff), in)!=NULL)
       {
          // printf("%s\n",buff);



      }
      pclose(in);
      }

    sleep(1);
    }





 }
