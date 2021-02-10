using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.Networking;

public class TestApi : MonoBehaviour
{
    // Start is called before the first frame update
    void Start()
    {
        Debug.Log("hello api");
        string url = "http://localhost:8080/user/1";
        StartCoroutine("GetMethod", url);
    }

    // Update is called once per frame
    void Update()
    {
    }

    IEnumerator GetMethod(string url)
    {
        UnityWebRequest webRequest = UnityWebRequest.Get(url);

        yield return webRequest.SendWebRequest();

        if (webRequest.isNetworkError)
        {
            Debug.Log(webRequest.error);
        }
        else
        {
            Debug.Log(webRequest.downloadHandler.text);
        }
    }
}
