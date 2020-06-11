<?php

namespace tappo03\overdark\api;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

/**
 * Class request of overdark api
 * @package overdark\api
 * @docs https://overdarkgame.com/langs/it/api/#/documentation
 * @author t.me/tappo03
 */
class request
{
    protected string $lang;
    protected string $token;
    protected bool $array;
    protected Client $client;

    /**
     * request constructor.
     * @param string $lang language of api result
     * @param string $token your api Token get by from t.me/OverDarkAPI_bot, if you not have, register to bot
     * @param bool $array choice of object return or array return
     */
    public function __construct (string $lang, string $token, bool $array = false)
    {
        $this->client = new Client([
            'base_uri' => 'https://api.overdarkgame.com/'
        ]);
        $this->array  = $array;
        $this->lang   = $lang;
        $this->token  = $token;
    }

    /**
     * Accedi alle informazioni del profilo del giocatore
     * @param string tag of Player
     * @return array | object
     */
    public function get_profile (string $tag)
    {
        try {
            $response = $this->client->request ('GET', 'get_profile.php?tag=' . urlencode ($tag) . '&token=' . urlencode ($this->token) . '&lang=' . urlencode ($this->lang));
        } catch (GuzzleException $e){
            exit($e->getMessage ());
        }
        if($response->getStatusCode () === 200)
            return json_decode ($response->getBody (), $this->array);
        else
            exit($response->getStatusCode ());
    }

    /**
     * Accedi alle informazioni del clan
     * @param string $clan_id tag of Clan
     * @return array | object
     */
    public function get_clan (string $clan_id)
    {
        try {
            $response = $this->client->request ('GET', 'get_clan.php?tag=' . urlencode ($clan_id) . '&token=' . urlencode ($this->token) . '&lang=' . urlencode ($this->lang));
        } catch (GuzzleException $e){
            exit($e->getMessage ());
        }
        if($response->getStatusCode () === 200)
            return json_decode ($response->getBody (), $this->array);
        else
            exit($response->getStatusCode ());
    }

    /**
     * Accedi alle informazioni dei personaggi
     * @return array | object
     */
    public function get_char_info ()
    {
        try {
            $response = $this->client->request ('GET', 'get_char_info.php?token=' . urlencode ($this->token) . '&lang=' . urlencode ($this->lang));
        } catch (GuzzleException $e){
            exit($e->getMessage ());
        }
        if($response->getStatusCode () === 200)
            return json_decode ($response->getBody (), $this->array);
        else
            exit($response->getStatusCode ());
    }

    /**
     * Accedi alle informazioni sulla classifica dei giocatori
     * @param string $type type of classification you want, you can select from: overworld or darkworld
     * @return array | object
     */
    public function get_classification (string $type)
    {
        try {
            $response = $this->client->request ('GET', 'get_classification.php?type=' . urlencode ($type) . '&token=' . urlencode ($this->token) . '&lang=' . urlencode ($this->lang));
        } catch (GuzzleException $e){
            exit($e->getMessage ());
        }
        if($response->getStatusCode () === 200)
            return json_decode ($response->getBody (), $this->array);
        else
            exit($response->getStatusCode ());
    }

    /**
     * Accedi alla foto profilo del giocatore
     * @param int $image_id Image id of player, you found this on get_profile
     * @param bool $background If void this set automatically default image type (with_background) for set image type, you can select from: with_background or without_background
     * @return string url of player propic
     */
    public function get_player_image (int $image_id, bool $background = true): string
    {
        $image_type = $background === true
            ? 'with_background'
            : 'without_background';

        return 'https://api.overdarkgame.com/get_player_image.php?type=' . urlencode ($image_type) . '&token=' . urlencode ($this->token) . '&id=' . urlencode ($image_id);
    }
}
