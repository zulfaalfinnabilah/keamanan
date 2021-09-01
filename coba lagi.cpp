#include <iostream>

using namespace std;

int main() {
    float nilai;
    cout<<"Masukkan nilai anda: ";
    cin>>nilai;

    if(nilai>30 && nilai<54){
      cout<<"Konversi nilai anda adalah:   D";
    }
    else if(nilai>55 && nilai<65){
      cout<<"Konversi nilai anda adalah:   C";
    }
    else if(nilai>66 && nilai<80){
      cout<<"Konversi nilai anda adalah:   B";
    }
    else if(nilai>81 && nilai<100){
      cout<<"Konversi nilai anda adalah:   A";
    }

    return 0;
}   
